package org.sdrc.cpmisweb.service;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

import org.hibernate.Session;
import org.hibernate.engine.jdbc.connections.spi.ConnectionProvider;
import org.hibernate.engine.spi.SessionFactoryImplementor;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 03-Mar-2018 12:01:39 pm
 */
@Service
public class AggregationServiceImpl implements AggregationService {

	@PersistenceContext
	EntityManager entityManager;
	
	@Autowired
	private TimePeriodRepository timePeriodRepository;
	
	private final Logger _log = LoggerFactory.getLogger(AggregationServiceImpl.class);
	
	private SimpleDateFormat simpleDateformat = new SimpleDateFormat("MMM yyyy");
	private SimpleDateFormat simpleDateformater = new SimpleDateFormat("yyyy-MM-dd");
	private DateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
	
	@Override
	@Transactional
	public Timeperiod createCurrentMonthTimePeriod() throws Exception {
		Calendar startDateCalendar = Calendar.getInstance();
		startDateCalendar.add(Calendar.MONTH, 0);
		startDateCalendar.set(Calendar.DATE, 1);
		Date sDate = startDateCalendar.getTime();
		String startDateStr = simpleDateformater.format(sDate);
		Date startDate = (Date) formatter.parse(startDateStr + " 00:00:00.000");
		startDateCalendar.set(Calendar.DATE, startDateCalendar.getActualMaximum(Calendar.DAY_OF_MONTH));

		Date eDate = startDateCalendar.getTime();
		String endDateStr = simpleDateformater.format(eDate);
		Date endDate = (Date) formatter.parse(endDateStr + " 00:00:00.000");
		
		Calendar startDateCalendar1 = Calendar.getInstance();
		startDateCalendar1.add(Calendar.MONTH, -1);
		startDateCalendar1.set(Calendar.DATE, 1);
		Date startDate1 = (Date) formatter.parse(simpleDateformater.format(startDateCalendar1.getTime()) + " 00:00:00.000");
		
		Timeperiod timePeriod = timePeriodRepository.findByStartDateAndEndDate(new java.util.Date(startDate.getTime()), new java.util.Date(endDate.getTime()));

		if (timePeriod == null) {
			timePeriod = new Timeperiod();
			timePeriod.setStartDate(new java.sql.Date(startDate.getTime()));
			timePeriod.setEndDate(new java.sql.Date(endDate.getTime()));
			timePeriod.setPeriodicity(1); 
			timePeriod.setTimePeriod(simpleDateformat.format(startDate1));
			
			timePeriod = timePeriodRepository.save(timePeriod);

		}
		System.out.println("Time period inserted successfully!");
		return timePeriod;
	}

	@Override
	public Timeperiod createQuaterlyTimePeriod() throws Exception {
		Calendar startDateCalendar = Calendar.getInstance();
		startDateCalendar.add(Calendar.MONTH, -3);
		startDateCalendar.set(Calendar.DATE, 1);
		Date strDate = startDateCalendar.getTime();
		String startDateStr = simpleDateformater.format(strDate);
		Date startDate = (Date) formatter.parse(startDateStr + " 00:00:00.000");
		Calendar endDateCalendar = Calendar.getInstance();
		endDateCalendar.add(Calendar.MONTH, -1);
		endDateCalendar.set(Calendar.DATE, endDateCalendar.getActualMaximum(Calendar.DAY_OF_MONTH));
		Date eDate = endDateCalendar.getTime();
		String endDateStr = simpleDateformater.format(eDate);
		Date endDate = (Date) formatter.parse(endDateStr + " 00:00:00.000");
		
		Calendar startDateCalendar1 = Calendar.getInstance();
		startDateCalendar1.add(Calendar.MONTH, -4);
		startDateCalendar1.set(Calendar.DATE, 1);
		Date startDate1 = (Date) formatter.parse(simpleDateformater.format(startDateCalendar1.getTime()) + " 00:00:00.000");
		
		Calendar endDateCalendar1 = Calendar.getInstance();
		endDateCalendar1.add(Calendar.MONTH, -2);
		endDateCalendar1.set(Calendar.DATE, endDateCalendar1.getActualMaximum(Calendar.DAY_OF_MONTH));
		Date endDate1 = (Date) formatter.parse(simpleDateformater.format(endDateCalendar1.getTime()) + " 00:00:00.000");

		Timeperiod timePeriod = timePeriodRepository.findByStartDateAndEndDate(new java.sql.Date(startDate.getTime()), new java.sql.Date(endDate.getTime()));

		if (timePeriod == null) {
			timePeriod = new Timeperiod();
			timePeriod.setStartDate(new java.sql.Date(startDate.getTime()));
			timePeriod.setEndDate(new java.sql.Date(endDate.getTime()));
			timePeriod.setPeriodicity(2);
			timePeriod.setTimePeriod(simpleDateformat.format(startDate1) +" - "+simpleDateformat.format(endDate1));
			
			timePeriod = timePeriodRepository.save(timePeriod);
			timePeriodRepository.update(timePeriod.getTimeperiodId(), timePeriod.getStartDate(), timePeriod.getEndDate());
		}
		return timePeriod;
	}

	@Override
	@Transactional
	public boolean callAggregation(Timeperiod timeperiod, String timeperiodIds) throws Exception {

		try {
			Session session = (Session) entityManager.getDelegate();
			SessionFactoryImplementor sfi = (SessionFactoryImplementor) session.getSessionFactory();
			@SuppressWarnings("deprecation")
			ConnectionProvider cp = sfi.getConnectionProvider();
			Connection connection = cp.getConnection();
			try (CallableStatement function = connection.prepareCall(
		            "{ call aggregatedata(?,?) }")) {
		      
		        function.setInt(1,timeperiod.getTimeperiodId());
		        function.setString(2, timeperiodIds);
		        function.execute();
		        System.out.println("Data aggregated successfullly!");
		    }
		}catch(Exception e) {
			_log.error("Critical: Aggregation for indicators cron job failed.{}",e);
			throw new Exception(e);
		}
		return true;
	}

}
