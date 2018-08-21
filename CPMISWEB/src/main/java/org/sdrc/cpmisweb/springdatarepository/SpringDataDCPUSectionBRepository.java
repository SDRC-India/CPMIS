/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionB;
import org.sdrc.cpmisweb.repository.DCPUSectionBRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:04:23 pm
 *
 */
public interface SpringDataDCPUSectionBRepository extends DCPUSectionBRepository,Repository<DCPUSectionB, Integer> {

}
