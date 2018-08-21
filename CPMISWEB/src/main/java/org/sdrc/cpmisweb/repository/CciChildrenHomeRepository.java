package org.sdrc.cpmisweb.repository;

import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciChildrenHome;
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 */
public interface CciChildrenHomeRepository {

	@Transactional
	CciChildrenHome save(CciChildrenHome cciChildrenHome);	
	CciChildrenHome findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDay, Date lastDay);
	CciChildrenHome findLastReportingMonthSubmissionData(Integer userId);
	CciChildrenHome findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	CciChildrenHome findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
