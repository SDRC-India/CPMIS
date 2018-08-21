package org.sdrc.cpmisweb.repository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciPlaceOfSafety;

public interface CciPlaceOfSafetyRepository {

	
	@Transactional
	CciPlaceOfSafety save(CciPlaceOfSafety cciPlaceOfSafety);
	CciPlaceOfSafety findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDay, Date lastDay);
	CciPlaceOfSafety findLastReportingMonthSubmissionData(Integer userId);
	CciPlaceOfSafety findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);

	Integer findMaxTimePeriod(int userId);
	CciPlaceOfSafety findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
