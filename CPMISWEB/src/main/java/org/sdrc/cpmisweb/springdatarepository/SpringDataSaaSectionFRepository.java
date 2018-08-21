/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.saa.SaaSectionF;
import org.sdrc.cpmisweb.repository.SaaSectionFRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:21:09 pm
 *
 */
public interface SpringDataSaaSectionFRepository extends SaaSectionFRepository,Repository<SaaSectionF,Integer>{

}
