/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionL;
import org.sdrc.cpmisweb.repository.DCPUSectionLRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:07:15 pm
 *
 */
public interface SpringDataDCPUSectionLRepository extends DCPUSectionLRepository,Repository<DCPUSectionL, Integer>{

}
