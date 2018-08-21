/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionH;
import org.sdrc.cpmisweb.repository.JjbSectionHRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:10:19 pm
 *
 */
public interface SpringDataJjbSectionHRepository extends JjbSectionHRepository,Repository<JjbSectionH,Integer> {

}
