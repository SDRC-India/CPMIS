package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.Subgroup;


public interface SubgroupRepository {

	
	public List<Subgroup> findAllByOrderBySubgroupValueIdAsc();
	public Subgroup findBySubgroupValueId(int subgroupValueId);
	public Subgroup findBySubgroupVal(String stringCellValue);
	public Subgroup save(Subgroup sg);
}
