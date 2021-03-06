/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 *   
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

/* $Rev: 483011 $ $Date: 2007/08/24 15:20:21 $ */

#ifndef _COPYHELPER_H_
#define _COPYHELPER_H_


#include "commonj/sdo/DataObject.h"
#include "commonj/sdo/RefCountingPointer.h"

namespace commonj{
namespace sdo{

    /** CopyHelper provides static copying helper functions.
     *
     * CopyHelper provides shallow and deep copy of data objects.
     * copyShallow() copies the DataType members of the data object.
     * copy() copies all the members and recurses downwards though
     * the data graph
     */
    
class CopyHelper
{
    public:

    /** CopyHelper provides static copying helper functions.
     *
     * CopyHelper provides shallow and deep copy of data objects.
     * copyShallow() copies the DataType members of the data object.
     * copy() copies all the members and recurses downwards though
     * the data graph
     */
    static SDO_API DataObjectPtr copyShallow(DataObjectPtr dataObject);
    
    /** CopyHelper provides static copying helper functions.
     *
     * CopyHelper provides shallow and deep copy of data objects.
     * copyShallow() copies the DataType members of the data object.
     * copy() copies all the members and recurses downwards though
     * the data graph
     */
    static SDO_API DataObjectPtr copy(DataObjectPtr dataObject);

    private:
    static void transferlist(DataObjectList& to, DataObjectList& from, Type::Types t);
    static void transferitem(DataObjectPtr   to, DataObjectPtr   from, const Property& p);
    static void transfersequenceitem(Sequence *to, Sequence *from, const Property& p, int index);

    static DataObjectPtr internalCopy(DataObjectPtr dataObject, bool fullCopy);
    static void resolveReferences(DataObjectPtr oldDO, DataObjectPtr newDO);
    static void findReferences(DataObjectPtr oldDO, DataObjectPtr newDO, DataObjectPtr obj, DataObjectPtr newObj);
    static DataObjectPtr findReference(DataObjectPtr oldDO, DataObjectPtr newDO, DataObjectPtr ref);

};
};
};

#endif //_COPYHELPER_H_
