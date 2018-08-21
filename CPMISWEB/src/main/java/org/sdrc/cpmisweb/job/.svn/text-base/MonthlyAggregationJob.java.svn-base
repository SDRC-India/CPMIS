package org.sdrc.cpmisweb.job;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.repository.DataEntryRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.sdrc.cpmisweb.service.AggregationService;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.scheduling.annotation.EnableScheduling;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Service;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 03-Mar-2018 11:37:43 am
 */
@Service
@EnableScheduling
public class MonthlyAggregationJob{
	private final Logger _log = LoggerFactory.getLogger(MonthlyAggregationJob.class);
	
	public static boolean isAggregationGoingOn = false;

	@Autowired
	AggregationService aggregationServiceImpl;
	
	@Autowired
	DataEntryRepository dataEntryRepository;
	
	@Autowired
	TimePeriodRepository timePeriodRepository;
	
	@Transactional
	@Scheduled(cron = "0 00 1 1 * *")//(second, minute, hour, day, month, weekday)01:00 am, 1st day of every month
	protected void createCurrentMonthTimePeriod() {
		try {
			// creating current month in Timeperiod
			aggregationServiceImpl.createCurrentMonthTimePeriod();
			System.out.println("Finished time period creation");
		} catch (Exception e) {
			_log.error("Critical: Monthly indicator aggregation cron job failed.{}",e);
		}
	}
	
	@Transactional
	@Scheduled(cron = "0 45 0 * * *")//(second, minute, hour, day, month, weekday)12:45 am, everyday
	protected void executeInternal() {
		try {
			System.out.println("Starting monthly indicator aggreation");
			
			Timeperiod timeperiod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
			//deleting data from Data table by timePeriod
			dataEntryRepository.deleteByTimeperiod(timeperiod.getTimeperiodId());
			//resetting the sequence of data table
			dataEntryRepository.resetSequence();
			isAggregationGoingOn = true;
			//calling the aggregation function
			aggregationServiceImpl.callAggregation(timeperiod, timeperiod.getTimeperiodId().toString());
			isAggregationGoingOn = false;
			
			System.out.println("Finished monthly indicator aggreation");
		} catch (Exception e) {
			_log.error("Critical: Monthly indicator aggregation cron job failed.{}",e);
		}finally{
			isAggregationGoingOn = false;
		}
	}
}