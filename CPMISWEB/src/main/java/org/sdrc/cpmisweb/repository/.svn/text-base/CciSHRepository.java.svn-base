package org.sdrc.cpmisweb.repository;

import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciSH;
/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 08-Mar-2018 5:17:57 pm
 */
public interface CciSHRepository {

	@Transactional
	CciSH save(CciSH cciHome);
	CciSH findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDay, Date lastDay);
	CciSH findLastReportingMonthSubmissionData(Integer userId);
	CciSH findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	CciSH findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
