/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionK;
import org.sdrc.cpmisweb.repository.JjbSectionKRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:10:54 pm
 *
 */
public interface SpringDataJjbSectionKRepository extends JjbSectionKRepository,Repository<JjbSectionK,Integer> {

}
