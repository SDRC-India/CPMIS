/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.UserCredentialsMetaData;
import org.sdrc.cpmisweb.repository.UserCredentialsMetaDataRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 15-Jan-2018 3:19:38 pm
 */
public interface SpringDataUserCredentialsMetaDataRepository extends
		UserCredentialsMetaDataRepository,
		Repository<UserCredentialsMetaData, Integer> {

}
