/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionJ;
import org.sdrc.cpmisweb.repository.JjbSectionJRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:10:47 pm
 *
 */
public interface SpringDataJjbSectionJRepository extends JjbSectionJRepository,Repository<JjbSectionJ,Integer> {

}
