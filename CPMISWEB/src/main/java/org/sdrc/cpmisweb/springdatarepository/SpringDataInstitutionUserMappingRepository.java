/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.InstitutionUserMapping;
import org.sdrc.cpmisweb.repository.InstitutionUserMappingRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 27-Nov-2017 4:48:31 pm
 *
 */
public interface SpringDataInstitutionUserMappingRepository extends InstitutionUserMappingRepository,Repository<InstitutionUserMapping, Integer> {

}
