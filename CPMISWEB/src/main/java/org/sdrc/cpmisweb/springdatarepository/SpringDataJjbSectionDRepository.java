/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;


import org.sdrc.cpmisweb.domain.jjb.JjbSectionD;
import org.sdrc.cpmisweb.repository.JjbSectionDRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:09:47 pm
 *
 */
public interface SpringDataJjbSectionDRepository extends JjbSectionDRepository,Repository<JjbSectionD,Integer> {

}
