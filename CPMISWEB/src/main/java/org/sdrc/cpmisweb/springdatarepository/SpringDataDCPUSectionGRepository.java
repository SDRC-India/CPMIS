/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionG;
import org.sdrc.cpmisweb.repository.DCPUSectionGRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:06:28 pm
 *
 */
public interface SpringDataDCPUSectionGRepository extends DCPUSectionGRepository,Repository<DCPUSectionG, Integer>{

}
