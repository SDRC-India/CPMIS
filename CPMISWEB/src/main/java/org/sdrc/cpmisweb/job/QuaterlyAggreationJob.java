package org.sdrc.cpmisweb.job;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.sdrc.cpmisweb.service.AggregationService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.scheduling.annotation.EnableScheduling;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Service;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 03-Mar-2018 12:42:11 am
 */
@Service
@EnableScheduling
public class QuaterlyAggreationJob{
	private final Logger _log = LoggerFactory.getLogger(QuaterlyAggreationJob.class);
	
	public static boolean isAggregationGoingOn = false;

	@Autowired
	AggregationService aggregationServiceImpl;
	
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Transactional
	@Scheduled(cron = "0 15 0 1 MAY,AUG,NOV,FEB *")//(second, minute, hour, day, month, weekday)12:15 am,1st day of the months specified
	protected void executeInternal(){
		try {
			System.out.println("Starting quarterly indicator aggreation");
			// creating quarter in Timeperiod
			Timeperiod timeperiod = aggregationServiceImpl.createQuaterlyTimePeriod();
			String timeperiodIds = "";
			List<Timeperiod> timeperiods = timePeriodRepository.findByQuarterTimeperiodId(timeperiod.getTimeperiodId());
			for(Timeperiod tp : timeperiods){
				timeperiodIds+=Integer.toString(tp.getTimeperiodId())+",";
			}
			timeperiodIds = timeperiodIds.substring(0, timeperiodIds.length()-1);
			// calling the aggregation function
			isAggregationGoingOn = true;
			aggregationServiceImpl.callAggregation(timeperiod, timeperiodIds);
			isAggregationGoingOn = false;
			System.out.println("Finished quarterly indicator aggreation");
		} catch (Exception e) {
			_log.error("Critical: Quaterly indicator aggregation cron job failed.{}",e);
		}finally{
			isAggregationGoingOn = false;
		}
	}
}