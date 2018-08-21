/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.core.IndicatorClassificationType;
import org.sdrc.cpmisweb.domain.IndicatorClassification;
import org.springframework.dao.DataAccessException;

/**
 * @author Biswa Ranjan CPMISWEB
 * 06-Jan-2018 5:24:15 pm
 * Pratyush(pratyush@sdrc.co.in) updated on 25-04-2018
 */
public interface IndicatorClassificationRepository {


	public IndicatorClassification save(IndicatorClassification ic);

	public IndicatorClassification findByIndicatorClassificationId(int icId);

	public List<IndicatorClassification> findByIndicatorClassificationTypeAndParentIsNull(IndicatorClassificationType indicatorClassificationType);

	public List<IndicatorClassification> findByIndicatorClassificationTypeAndParentIsNotNull(IndicatorClassificationType indicatorClassificationType);

	public List<IndicatorClassification> findByParent(IndicatorClassification indicatorClassificationOrSectorSubSectorSource);

	public List<IndicatorClassification> findAll();
	
	public List<IndicatorClassification> findByIndicatorClassificationType(IndicatorClassificationType indicatorClassificationType);
	
	public List<IndicatorClassification> findByIndicatorClassificationTypeAndUserType(
			IndicatorClassificationType indicatorClassificationType, Integer userType);
	
	public List<IndicatorClassification> findByIndicatorClassificationTypeAndNameNotLike(IndicatorClassificationType icType, String sjpu);

	public List<IndicatorClassification> findByIUS_Nid(Integer iusNid) throws DataAccessException;
	
	public List<Object[]> findAllIndicators();
	
	public IndicatorClassification findByNameAndParentIsNotNull(String stringCellValue);

	public IndicatorClassification findByNameAndParentIsNull(String stringCellValue);

	public IndicatorClassification findByNameAndParent(String stringCellValue, IndicatorClassification icSector);

}
