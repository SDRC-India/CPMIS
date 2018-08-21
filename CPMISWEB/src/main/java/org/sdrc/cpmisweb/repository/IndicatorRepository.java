/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.Indicator;
import org.sdrc.cpmisweb.domain.IndicatorClassification;
import org.springframework.dao.DataAccessException;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Jan-2018 5:23:24 pm
 *
 */
public interface IndicatorRepository {


	public Indicator save(Indicator indicator);

	public Indicator findByIndicatorId(int indicatorId);

	public List<Indicator> findAll();

	public Indicator findByIndicator_NId(int indicatorId);
	
	public List<Object[]> findByIC_Type_(IndicatorClassification sectorNid, Integer[] units) throws DataAccessException;
	
	public Indicator findByIndicatorName(String indicatorName);
	
	//@author(Pratyush)
	public List<Object[]> findByIndicatorClassification(IndicatorClassification sectorNid) throws DataAccessException;

}
