/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionJ;
import org.sdrc.cpmisweb.repository.DCPUSectionJRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:06:56 pm
 *
 */
public interface SpringDataDCPUSectionJRepository extends DCPUSectionJRepository,Repository<DCPUSectionJ, Integer>{

}
