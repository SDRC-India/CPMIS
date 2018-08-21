package org.sdrc.cpmisweb.repository;

import java.util.Date;

import org.sdrc.cpmisweb.domain.dcpu.DcpuDetails;
/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 06-Nov-2017 3:00:45 pm
 */
public interface DcpuDetailsRepository {

	DcpuDetails save(DcpuDetails dcpuDetails);
	DcpuDetails findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDate, Date lastDate);
	DcpuDetails findLastReportingMonthSubmissionData(Integer userId);
	DcpuDetails findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	DcpuDetails findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
