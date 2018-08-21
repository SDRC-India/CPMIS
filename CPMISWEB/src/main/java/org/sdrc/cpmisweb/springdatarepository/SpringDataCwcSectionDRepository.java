/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionD;
import org.sdrc.cpmisweb.repository.CwcSectionDRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:09:03 pm
 *
 */
public interface SpringDataCwcSectionDRepository extends CwcSectionDRepository,Repository<CwcSectionD,Integer> {

}
