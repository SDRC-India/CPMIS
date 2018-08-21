/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionC;
import org.sdrc.cpmisweb.repository.DCPUSectionCRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:04:54 pm
 *
 */
public interface SpringDataDCPUSectionCRepository extends DCPUSectionCRepository,Repository<DCPUSectionC, Integer> {

}
