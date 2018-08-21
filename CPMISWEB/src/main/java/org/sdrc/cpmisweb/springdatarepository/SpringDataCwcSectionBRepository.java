/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;


import org.sdrc.cpmisweb.domain.cwc.CwcSectionB;
import org.sdrc.cpmisweb.repository.CwcSectionBRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:08:44 pm
 *
 */
public interface SpringDataCwcSectionBRepository extends CwcSectionBRepository,Repository<CwcSectionB, Integer> {

}
