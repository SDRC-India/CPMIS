package org.sdrc.cpmisweb.repository;

import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciOH;
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 */
public interface CciOHRepository {
	
	@Transactional
	CciOH save(CciOH cciHome);
	CciOH findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDay, Date lastDay);
	CciOH findLastReportingMonthSubmissionData(Integer userId);
	CciOH findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	CciOH findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
