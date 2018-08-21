package org.sdrc.cpmisweb.repository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciOpenShelter;

public interface CciOpenShelterRepository {

	@Transactional
	CciOpenShelter save(CciOpenShelter cciOpenShelter);
	CciOpenShelter findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDay, Date lastDay);
	CciOpenShelter findLastReportingMonthSubmissionData(Integer userId);
	CciOpenShelter findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	CciOpenShelter findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
