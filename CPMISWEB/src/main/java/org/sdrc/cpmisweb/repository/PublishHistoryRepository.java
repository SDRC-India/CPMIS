/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import org.sdrc.cpmisweb.domain.PublishHistory;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Jan-2018 5:40:58 pm
 *
 */
public interface PublishHistoryRepository {
	PublishHistory findByDataBeingPublishedForMonthAndDataBeingPublishedForYear(Integer month,Integer year);

	PublishHistory save(PublishHistory history);

}
