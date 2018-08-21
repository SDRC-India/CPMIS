/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.saa.SaaSectionC;
import org.sdrc.cpmisweb.repository.SaaSectionCRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:20:40 pm
 *
 */
public interface SpringDataSaaSectionCRepository extends SaaSectionCRepository,Repository<SaaSectionC,Integer> {

}
