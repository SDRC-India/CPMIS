package org.sdrc.cpmisweb.repository;

import java.util.Date;
import java.util.List;

import org.sdrc.cpmisweb.domain.Timeperiod;

/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.c.in)
 * 06-Jan-2018 5:35:28 pm
 */
public interface TimePeriodRepository {

	public Timeperiod findByTimePeriod(String timePeriod);

	public Timeperiod save(Timeperiod timeperiod);

	public List<Timeperiod> findBySource_Nid(Integer iusNid, Integer sourceNid);

	public Timeperiod findByTimeperiodId(int timePeriod);

	public List<Timeperiod> findBySource_NidForPublicView(Integer iusNid, Integer sourceNid);

	List<Timeperiod> findAll();

	public List<Timeperiod> findTimePeriodsPresentForDataOfMyAgencyAllPublishedAndUnPublished(int agencyId);
	
	public Timeperiod findByStartDateAndEndDate(Date startDate, Date endDate);
	
	public List<Timeperiod> findAllByOrderByTimeperiodIdDesc();
	
	public Timeperiod findTopByOrderByTimeperiodIdDesc();
	
	public Timeperiod findTopByPeriodicityOrderByTimeperiodIdDesc(Integer periodicityId);
	
	public Timeperiod findTopByPeriodicityOrderByTimeperiodIdAsc(Integer periodicityId);

	public List<Timeperiod> findByPeriodicityOrderByTimeperiodIdDesc(Integer periodicityId);
	
	Timeperiod findNextTimeperiodOfGivenId(Integer id);
	
	public void update(Integer timeperiodId, Date startDate, Date endDate);
	
	public List<Timeperiod> findByQuarterTimeperiodId(Integer quarterId);

}
