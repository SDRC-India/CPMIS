/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;


import org.sdrc.cpmisweb.domain.jjb.JjbSectionA;
import org.sdrc.cpmisweb.repository.JjbSectionARepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:12:00 pm
 *
 */
public interface SpringDataJjbSectionARepository extends JjbSectionARepository,Repository<JjbSectionA,Integer> {

}
