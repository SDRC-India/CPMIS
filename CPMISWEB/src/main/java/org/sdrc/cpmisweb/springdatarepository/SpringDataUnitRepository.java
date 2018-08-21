package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.Unit;
import org.sdrc.cpmisweb.repository.UnitRepository;
import org.springframework.data.repository.RepositoryDefinition;



@RepositoryDefinition(domainClass=Unit.class,idClass=Integer.class)
public interface SpringDataUnitRepository extends UnitRepository{

}
