/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 12-Mar-2018 11:56:44 am
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.UserDomain;
import org.sdrc.cpmisweb.repository.UserDomainRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 12-Mar-2018 11:56:44 am
 */
public interface SpringDataUserDomainRepository extends UserDomainRepository,Repository<UserDomain, Integer> {

}
