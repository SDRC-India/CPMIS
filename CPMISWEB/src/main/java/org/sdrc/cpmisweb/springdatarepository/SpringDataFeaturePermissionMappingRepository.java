/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 10:19:50 am
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.FeaturePermissionMapping;
import org.sdrc.cpmisweb.repository.FeaturePermissionMappingRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 10:19:50 am
 */
public interface SpringDataFeaturePermissionMappingRepository extends FeaturePermissionMappingRepository,Repository<FeaturePermissionMapping, Integer> {

}
