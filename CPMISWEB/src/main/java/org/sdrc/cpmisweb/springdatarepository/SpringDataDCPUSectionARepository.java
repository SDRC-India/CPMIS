/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionA;
import org.sdrc.cpmisweb.repository.DCPUSectionARepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:04:04 pm
 *
 */
public interface SpringDataDCPUSectionARepository extends DCPUSectionARepository,Repository<DCPUSectionA, Integer> {


}
