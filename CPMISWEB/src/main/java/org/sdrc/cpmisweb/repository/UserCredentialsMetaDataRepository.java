/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.UserCredentialsMetaData;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 15-Jan-2018 3:14:01 pm
 */
public interface UserCredentialsMetaDataRepository {

	@Transactional
	void save(UserCredentialsMetaData userCredentialsMetaData);

	List<UserCredentialsMetaData> findByCpmisUserUserIdAndIsActiveTrue(Integer userId);

	UserCredentialsMetaData findByActivationCode(String byteToString);

	UserCredentialsMetaData findByActivationCodeAndIsActiveTrue(String getuKey);
}
