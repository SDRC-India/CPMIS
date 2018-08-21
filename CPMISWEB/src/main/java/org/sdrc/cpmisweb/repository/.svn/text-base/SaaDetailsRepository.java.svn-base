package org.sdrc.cpmisweb.repository;

import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaDetails;
/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 25-Dec-2017 1:13:56 pm
 */
public interface SaaDetailsRepository {

	@Transactional
    SaaDetails save(SaaDetails saaDetails);
    SaaDetails findByUserIdAndIsSubmittedIsFalse(Integer userId);
    SaaDetails findByUserIdAndMonthyearAndIsSubmittedIsTrue(Integer userId,Date monthAndYear);
    SaaDetails findByUserId(Integer userId);
    SaaDetails findByUserIdAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
    SaaDetails findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDate, Date lastDate);
    SaaDetails findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
    
    SaaDetails findLastReportingMonthSubmissionData(Integer userId);
    Integer findMaxTimePeriod(int userId);
    SaaDetails findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
