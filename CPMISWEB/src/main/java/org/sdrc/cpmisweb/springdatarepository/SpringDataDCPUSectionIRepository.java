/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionI;
import org.sdrc.cpmisweb.repository.DCPUSectionIRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:06:49 pm
 *
 */
public interface SpringDataDCPUSectionIRepository extends DCPUSectionIRepository,Repository<DCPUSectionI, Integer>{

}
