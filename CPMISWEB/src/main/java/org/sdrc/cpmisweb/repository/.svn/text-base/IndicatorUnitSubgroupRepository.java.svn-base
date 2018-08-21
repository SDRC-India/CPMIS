/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.Indicator;
import org.sdrc.cpmisweb.domain.IndicatorUnitSubgroup;
import org.sdrc.cpmisweb.domain.Subgroup;
import org.sdrc.cpmisweb.domain.Unit;



/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Jan-2018 5:32:59 pm
 *
 */
public interface IndicatorUnitSubgroupRepository {


	public IndicatorUnitSubgroup save(IndicatorUnitSubgroup ius);

	public IndicatorUnitSubgroup findByIndicatorUnitSubgroupId(int id);
	
	public IndicatorUnitSubgroup findByIndicatorAndUnitAndSubgroup(Indicator indicator,Unit unit,Subgroup subgroup);

	public List<IndicatorUnitSubgroup> findAll();
	
	public List<IndicatorUnitSubgroup> findAllByOrderByIndicatorUnitSubgroupIdAsc();
	
}
