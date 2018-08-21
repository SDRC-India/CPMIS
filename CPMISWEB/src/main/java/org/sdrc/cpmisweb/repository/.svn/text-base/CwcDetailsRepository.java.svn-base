package org.sdrc.cpmisweb.repository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcDetails;

public interface CwcDetailsRepository {
	@Transactional
	CwcDetails save(CwcDetails cwcDetails);
	
	CwcDetails findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDate, Date lastDate);
	
	CwcDetails findLastReportingMonthSubmissionData(Integer userId);
	
	CwcDetails findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	
	CwcDetails findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
