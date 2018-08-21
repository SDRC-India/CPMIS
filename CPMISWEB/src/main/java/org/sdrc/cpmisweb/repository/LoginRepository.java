package org.sdrc.cpmisweb.repository;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;

public interface LoginRepository {

	CPMISUserDetails findByPasswordAndUsername(String userName, String password);

	
}
