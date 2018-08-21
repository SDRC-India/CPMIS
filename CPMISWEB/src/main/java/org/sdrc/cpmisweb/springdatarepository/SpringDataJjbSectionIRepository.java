/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionI;
import org.sdrc.cpmisweb.repository.JjbSectionIRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:10:39 pm
 *
 */
public interface SpringDataJjbSectionIRepository extends JjbSectionIRepository,Repository<JjbSectionI,Integer>{

}
