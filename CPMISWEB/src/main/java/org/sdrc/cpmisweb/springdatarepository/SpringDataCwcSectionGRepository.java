/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionG;
import org.sdrc.cpmisweb.repository.CwcSectionGRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:09:34 pm
 *
 */
public interface SpringDataCwcSectionGRepository extends CwcSectionGRepository,Repository<CwcSectionG,Integer>{

}
