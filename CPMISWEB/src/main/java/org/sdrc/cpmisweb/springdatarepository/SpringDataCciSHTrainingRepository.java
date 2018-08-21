/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.CciSHTraining;
import org.sdrc.cpmisweb.repository.CciSHTrainingRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 08-Mar-2018 5:26:33 pm
 */
public interface SpringDataCciSHTrainingRepository extends CciSHTrainingRepository,Repository<CciSHTraining, Integer> {

}
