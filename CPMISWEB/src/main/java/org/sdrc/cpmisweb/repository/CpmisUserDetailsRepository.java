/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.springframework.transaction.annotation.Transactional;


/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * 28-Dec-2017 5:59:36 pm
 *
 */
public interface CpmisUserDetailsRepository {

	void changePassword(Integer userId, String newPassword);
	
	List<CPMISUserDetails> findByEmailId(String email);
	List<CPMISUserDetails> findAll();
	List<CPMISUserDetails> findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrue();
	CPMISUserDetails findByUserId(Integer userId);
	List<CPMISUserDetails> findByPasswordIsNull();

	/**
	 * @param i
	 * @return
	 */
	List<CPMISUserDetails> findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrueAndUserTypeIdUserTypeIdIsNot(Integer userTypeId);

	/**
	 * @param i
	 * @return
	 */
	List<CPMISUserDetails> findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrueAndUserTypeIdUserTypeIdIsNot(
			int userTypeId);

	/**
	 * @param parseInt
	 * @param i
	 * @return
	 */
	List<CPMISUserDetails> findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrueAndUserTypeIdUserTypeIdIsNotAndUserTypeIdUserTypeIdIsNot(
			int userTypeId, int userTypeId1);
	
	void updateUserPassword(Integer userId, String userName, String password);
	
	public CPMISUserDetails save(CPMISUserDetails cuds);
	
	/** 
	 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 21-04-2018 
	 * @param userId
	 * @param password
	 */
	@Transactional
	void updateByUserId(Integer userId, String password);
}
