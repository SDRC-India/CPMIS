/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionO;
import org.sdrc.cpmisweb.repository.DCPUSectionORepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 6:16:50 pm
 *
 */
public interface SpringDataDCPUSectionORepository extends DCPUSectionORepository,Repository<DCPUSectionO, Integer> {

}
