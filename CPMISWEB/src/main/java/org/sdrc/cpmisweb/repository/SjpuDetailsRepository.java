package org.sdrc.cpmisweb.repository;

import java.util.Date;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.sjpu.SjpuDetails;
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:18:16 pm
 */
public interface SjpuDetailsRepository {
	@Transactional
	SjpuDetails save(SjpuDetails sjpuDetails);
	SjpuDetails findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(Integer userId, Date firstDate, Date lastDate);
	SjpuDetails findByUserIdAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	SjpuDetails findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(Integer userId, Date firstDate, Date lastDate);
	
	Integer findMaxTimePeriod(int userId);
	SjpuDetails findByUserIdAndTimeperiodTimeperiodId(Integer userId, Integer timePeriodId);
}
