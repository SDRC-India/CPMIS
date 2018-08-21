/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionA;
import org.sdrc.cpmisweb.repository.CwcSectionARepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:08:32 pm
 *
 */
public interface SpringDataCwcSectionARepository extends CwcSectionARepository,Repository<CwcSectionA, Integer> {

}
