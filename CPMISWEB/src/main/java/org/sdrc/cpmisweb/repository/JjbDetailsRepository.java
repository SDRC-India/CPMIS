package org.sdrc.cpmisweb.repository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbDetails;

public interface JjbDetailsRepository {
	@Transactional
	JjbDetails save(JjbDetails jjbDetails);
	JjbDetails findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDate, Date lastDate);
	JjbDetails findLastReportingMonthSubmissionData(Integer userId);
	JjbDetails findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	JjbDetails findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
