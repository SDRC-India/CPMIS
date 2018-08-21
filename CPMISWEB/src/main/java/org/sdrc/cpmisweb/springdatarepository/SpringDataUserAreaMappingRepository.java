/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 10:21:25 am
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.UserAreaMapping;
import org.sdrc.cpmisweb.repository.UserAreaMappingRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 10:21:25 am
 */
public interface SpringDataUserAreaMappingRepository extends UserAreaMappingRepository,Repository<UserAreaMapping,Integer> {

}
