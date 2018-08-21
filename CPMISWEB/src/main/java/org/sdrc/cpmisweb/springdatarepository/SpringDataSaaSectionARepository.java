/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.saa.SaaSectionA;
import org.sdrc.cpmisweb.repository.SaaSectionARepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:20:15 pm
 *
 */
public interface SpringDataSaaSectionARepository extends SaaSectionARepository,Repository<SaaSectionA,Integer>{

}
