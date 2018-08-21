/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 10:22:19 am
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.UserTypeFeaturePermissionScheme;
import org.sdrc.cpmisweb.repository.UserTypeFeaturePermissionSchemeRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 10:22:19 am
 */
public interface SpringDataUserTypeFeaturePermissionSchemeRepository extends UserTypeFeaturePermissionSchemeRepository,Repository<UserTypeFeaturePermissionScheme,Integer>{

}
