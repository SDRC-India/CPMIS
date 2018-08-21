package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.repository.LoginRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataLoginRepository extends LoginRepository, Repository<CPMISUserDetails, Integer>{

	@Override
	@Query("select ud from CPMISUserDetails ud where ud.userName = :userName and ud.password = :password")
	CPMISUserDetails findByPasswordAndUsername(@Param("userName") String userName,@Param("password") String password);
}
