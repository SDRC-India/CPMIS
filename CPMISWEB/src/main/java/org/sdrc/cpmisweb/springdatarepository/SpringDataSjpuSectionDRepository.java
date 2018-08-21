package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionD;
import org.sdrc.cpmisweb.repository.SjpuSectionDRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:44:58 pm
 */
public interface SpringDataSjpuSectionDRepository extends SjpuSectionDRepository, Repository<SjpuSectionD, Integer> {

}
