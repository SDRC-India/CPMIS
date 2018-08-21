/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.saa.SaaSectionH;
import org.sdrc.cpmisweb.repository.SaaSectionHRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:21:32 pm
 *
 */
public interface SpringDataSaaSectionHRepository extends SaaSectionHRepository,Repository<SaaSectionH,Integer>{

}
