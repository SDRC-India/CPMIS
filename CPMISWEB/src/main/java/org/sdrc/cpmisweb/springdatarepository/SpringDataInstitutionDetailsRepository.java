/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 07-Mar-2018 4:46:59 pm
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.InstitutionDetails;
import org.sdrc.cpmisweb.repository.InstitutionDetailsRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 07-Mar-2018 4:46:59 pm
 */
public interface SpringDataInstitutionDetailsRepository extends InstitutionDetailsRepository,Repository<InstitutionDetails, Integer> {

}
