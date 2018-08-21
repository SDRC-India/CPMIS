package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.TypeDetails;
import org.sdrc.cpmisweb.repository.TypeDetailsRepository;
import org.springframework.cache.annotation.Cacheable;
import org.springframework.data.repository.Repository;

public interface SpringDataTypeDetailsRepository extends TypeDetailsRepository,	Repository<TypeDetails, Integer> {

	@Cacheable(value="typedetailsCache")
	List<TypeDetails> findAll();
}
